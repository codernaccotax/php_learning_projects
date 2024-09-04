<?php
class TableGenerator {
    // Function to generate HTML table from 2D associative array
    public function generateTable($data) {
        // Start with an empty string for the HTML
        $html = '';

        // Check if the input is a non-empty array
        if (is_array($data) && !empty($data)) {
            $html .= '<table class="table table-striped">';
            
            // Generate the table header using keys from the first row
            $html .= '<thead><tr>';
            foreach ($data[0] as $key => $value) {
                $html .= '<th>' . htmlspecialchars($key) . '</th>';
            }
            $html .= '</tr></thead>';

            // Generate the table body
            $html .= '<tbody>';
            foreach ($data as $row) {
                $html .= '<tr>';
                foreach ($row as $cell) {
                    $html .= '<td>' . htmlspecialchars($cell) . '</td>';
                }
                $html .= '</tr>';
            }
            $html .= '</tbody>';

            $html .= '</table>';
        } else {
            // Return a message if the data is not valid
            $html = '<p>No data available to display.</p>';
        }

        return $html;
    }
}

// Example usage

?>
