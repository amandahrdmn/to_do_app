<?php


namespace App\ViewHelpers;


class CreateToDoViewHelper
{
    static public function displayCreateToDoSection() {
        $HTMLstring = '<section class="mb-3">
                            <div class="container p-0">
                                <h2>Add an entry:</h2>
                                <form class="row container flex-column" action="/add_entry" method="POST">
                                    <textarea class="w-50 form-control shadow-none" name="text" placeholder="Add your new entry here"></textarea>
                                    <div class="mt-1">
                                        <button class="d-btn btn-primary btn-sm mt-2"
                                                type="submit">
                                                <span class="small">Submit</span>
                                        </button>
                                    </div>
                                </form>
                                </div>
                        </section>';

        return $HTMLstring;
    }
}