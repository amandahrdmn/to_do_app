<?php


namespace App\ViewHelpers;


class CompletedListViewHelper
{
    static public function displayCompletedEntries($completed_entries)
    {
        $HTMLString = '<section class="mb-3">
                            <div class="container p-0">
                                <h2>Completed Entries:</h2>
                                <div class="row container flex-column">';
        foreach ($completed_entries as $completed_entry) {
            $HTMLString .= '<div class="row align-items-center my-1">
                                <form action="/delete_entry" method="POST" class="d-inline col-2">
                                    <button type="submit"
                                            class="btn btn-danger btn-sm small"
                                            name="id" 
                                            value="' . $completed_entry["id"] . '">
                                            <span class="small">Delete</span>
                                    </button>
                                </form>' .
                                '<div class="col-10 small text-wrap">' . $completed_entry["text"] . '</div>
                            </div>';
        }

        $HTMLString .= "</section>";

        return $HTMLString;
    }
}
