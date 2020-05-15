<?php


namespace App\ViewHelpers;


class UncompletedListViewHelper
{
    static public function displayUncompletedEntries($uncompleted_entries) {
        $HTMLString = '<section class="mb-3">
                            <div class="container p-0">
                                <h2>Uncompleted Entries:</h2>
                                <div class="row container flex-column">';
        foreach($uncompleted_entries as $uncompleted_entry) {
            $HTMLString .= '<div class="row align-items-center my-1">
                                <form action="/complete_entry" method="POST" class="d-inline col-2">
                                    <button type="submit"
                                            class="btn btn-success btn-sm small"
                                            name="id" 
                                            value="' . $uncompleted_entry["id"] . '">
                                            <span class="small">Complete</span>
                                    </button>
                                </form>' .
                                '<div class="col-10 small text-wrap">' . $uncompleted_entry["text"] . '</div>
                            </div>';
        }

        $HTMLString .= "</div></div></section>";

        return $HTMLString;
    }
}