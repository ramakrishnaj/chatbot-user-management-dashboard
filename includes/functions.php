<?php

// Utility functions for the Chatbot User Management Dashboard

/**
 * Get current UTC date and time in formatted string.
 *
 * @return string
 */
function getCurrentDateTime() {
    return date('Y-m-d H:i:s');
}

/**
 * Log a message with the current user's login for tracking actions.
 *
 * @param string $message
 * @return void
 */
function logAction(string $message) {
    $currentUser = 'ramakrishnaj'; // Replace with dynamic user retrieval if needed.
    $dateTime = getCurrentDateTime();
    echo "[$dateTime] [$currentUser] $message\n";
}

?>
