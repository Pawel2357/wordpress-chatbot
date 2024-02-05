<?php
/**
 * Chatbot ChatGPT for WordPress - Settings - Appearance - Ver 1.8.1
 *
 * This file contains the code for the Chatbot ChatGPT settings page.
 * It handles the appearance settings and other parameters.
 * 
 *
 * @package chatbot-chatgpt
 */

// IDEA - COMING SOON - Ver 1.6.8

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Set the chatbot text color
function chatbot_chatgpt_appearance_text_color_callback(): void {
    // Get the value of the setting we've registered with register_setting()
    $chatbot_chatgpt_appearance_text_color = esc_attr(get_option('chatbot_chatgpt_appearance_text_color', '#ffffff'));
    ?>
    <input type="text" id="chatbot_chatgpt_appearance_text_color"
        name="chatbot_chatgpt_appearance_text_color"
        value="<?php echo esc_attr($chatbot_chatgpt_appearance_text_color); ?>"
        class="my-color-field"
    />
    <?php
    if(empty($chatbot_chatgpt_appearance_text_color)) {
        // Show an error message or handle the error
        chatbot_chatgpt_general_admin_notice( 'Text color cannot be blank.');
        update_option('chatbot_chatgpt_appearance_text_color', '#ffffff');
    } else {
        // Save the value
        update_option('chatbot_chatgpt_appearance_text_color', $chatbot_chatgpt_appearance_text_color);
    }
}

// Now override the css with the color chosen by the user
function chatbot_chatgpt_appearance_text_color_custom_css_settings(): void {
    $chatbot_chatgpt_appearance_text_color = esc_attr(get_option('chatbot_chatgpt_appearance_text_color', '#ffffff'));
    ?>
    <style>
        /* .chatbot-bubble {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        } */
        .floating-style {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        .embedded-style {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        .user-text {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        .bot-text {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        #chatgptTitle.title {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        .typing-dot {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
        .chatbot-chatgpt-custom-button-class {
            color: <?php echo $chatbot_chatgpt_appearance_text_color; ?> !important;
        }
    </style>
    <?php
}

// Set the chatbot user text background color
function chatbot_chatgpt_appearance_user_text_background_color_callback(): void {
    // Get the value of the setting we've registered with register_setting()
    $chatbot_chatgpt_appearance_user_text_background_color = esc_attr(get_option('chatbot_chatgpt_appearance_user_text_background_color', '#007bff'));
    ?>
    <input type="text" id="chatbot_chatgpt_appearance_user_text_background_color"
        name="chatbot_chatgpt_appearance_user_text_background_color"
        value="<?php echo esc_attr($chatbot_chatgpt_appearance_user_text_background_color); ?>"
        class="my-color-field"
    />
    <?php
    if(empty($chatbot_chatgpt_appearance_user_text_background_color)) {
        // Show an error message or handle the error
        chatbot_chatgpt_general_admin_notice( 'User text background color cannot be blank.');
        update_option('chatbot_chatgpt_appearance_user_text_background_color', '#007bff');
    } else {
        // Save the value
        update_option('chatbot_chatgpt_appearance_user_text_background_color', $chatbot_chatgpt_appearance_user_text_background_color);
    }

}

// Now override the css with the color chosen by the user
function chatbot_chatgpt_appearance_user_text_background_custom_css_settings(): void {
    $chatbot_chatgpt_appearance_user_text_background_color = esc_attr(get_option('chatbot_chatgpt_appearance_user_text_background_color', '#007bff'));
    ?>
    <style>
        .user-text {
            background-color: <?php echo $chatbot_chatgpt_appearance_user_text_background_color; ?> !important;
        }
    </style>
    <?php
}

// Set the chatbot bot text background color
function chatbot_chatgpt_appearance_bot_text_background_color_callback(): void {
    // Get the value of the setting we've registered with register_setting()
    $chatbot_chatgpt_appearance_bot_text_background_color = esc_attr(get_option('chatbot_chatgpt_appearance_bot_text_background_color', '#5BC236'));
    ?>
    <input type="text" id="chatbot_chatgpt_appearance_bot_text_background_color"
        name="chatbot_chatgpt_appearance_bot_text_background_color"
        value="<?php echo esc_attr($chatbot_chatgpt_appearance_bot_text_background_color); ?>"
        class="my-color-field"
    />
    <?php
    if(empty($chatbot_chatgpt_appearance_bot_text_background_color)) {
        // Show an error message or handle the error
        chatbot_chatgpt_general_admin_notice( 'Bot text background color cannot be blank.');
        update_option('chatbot_chatgpt_appearance_bot_text_background_color', '#5BC236');
    } else {
        // Save the value
        update_option('chatbot_chatgpt_appearance_bot_text_background_color', $chatbot_chatgpt_appearance_bot_text_background_color);
    }
}

// Now override the css with the color chosen by the user
function chatbot_chatgpt_appearance_bot_text_background_custom_css_settings(): void {
    $chatbot_chatgpt_appearance_bot_text_background_color = esc_attr(get_option('chatbot_chatgpt_appearance_bot_text_background_color', '#5BC236'));
    ?>
    <style>
        .bot-text {
            background-color: <?php echo $chatbot_chatgpt_appearance_bot_text_background_color; ?> !important;
        }
        .typing-indicator {
            background-color: <?php echo $chatbot_chatgpt_appearance_bot_text_background_color; ?> !important;
        }
    </style>
    <?php
}