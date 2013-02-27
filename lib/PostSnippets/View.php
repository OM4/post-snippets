<?php
/**
 * Class for MVC like View Handling in WordPress.
 *
 * @package  Post Snippets
 * @author   Johan Steen <artstorm at gmail dot com>
 */
class PostSnippets_View
{
    /**
     * Render a View.
     * 
     * @param  string  $filePath  Include path to the view.
     * @param  array   $data      Data to be used within the view.
     * @return string  Returns the completed view.
     */
    public static function render($file, $data = null)
    {
        // Check for data
        ($data) ? extract($data) : null;
 
        ob_start();
        include ($filePath);
        $view = ob_get_contents();
        ob_end_clean();

        return $view;
    }
}
