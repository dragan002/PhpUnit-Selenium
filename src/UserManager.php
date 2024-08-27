<?php

class UserManager {
    protected $db;
    protected $logger;

    public function __construct($db, Logger $logger) {
        $this->db = $db;
        $this->logger = $logger;
    }

    public function addUser($username) {
        // Check if the username is already taken
        $stmt = $this->db->prepare("SELECT 1 FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        if ($stmt->fetch()) {
            throw new Exception("Username already taken");
        }

        // Insert the new user into the database
        $stmt = $this->db->prepare("INSERT INTO users (username) VALUES (:username)");
        $stmt->execute(['username' => $username]);

        // Get the ID of the newly inserted user
        $userId = $this->db->lastInsertId();

        // Log the action
        $this->logger->log("User {$username} was added with ID {$userId}.");

        return $userId;
    }
}
