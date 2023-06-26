<?php

// Class representing a graph
class Graph {
    private $vertices;
    private $graph;

    public function __construct($vertices) {
        $this->vertices = $vertices;
        $this->graph = array();
        for ($i = 0; $i < $vertices; $i++) {
            $this->graph[$i] = array_fill(0, $vertices, 0);
        }
    }

    // Function to add an edge to the graph
    public function addEdge($source, $destination, $weight) {
        $this->graph[$source][$destination] = $weight;
        $this->graph[$destination][$source] = $weight;
    }

    // Function to find the vertex with the minimum distance value
    private function minDistance($distances, $visited) {
        $min = PHP_INT_MAX;
        $minIndex = -1;
        for ($v = 0; $v < $this->vertices; $v++) {
            if (!$visited[$v] && $distances[$v] <= $min) {
                $min = $distances[$v];
                $minIndex = $v;
            }
        }
        return $minIndex;
    }

    // Function to print the shortest path from source to destination
    public function printShortestPath($distances, $parent, $source, $destination) {
        $path = array();
        $pathIndex = 0;
        $path[$pathIndex] = $destination;
        $pathIndex++;

        $currentVertex = $destination;
        while ($parent[$currentVertex] !== -1) {
            $path[$pathIndex] = $parent[$currentVertex];
            $pathIndex++;
            $currentVertex = $parent[$currentVertex];
        }

        echo "Shortest path from " . $this->getCityName($source) . " to " . $this->getCityName($destination) . ": ";
        for ($i = $pathIndex - 1; $i >= 0; $i--) {
            echo $this->getCityName($path[$i]);
            if ($i > 0) {
                echo " -> ";
            }
        }
        echo "<br>";
    }

    // Function to print the shortest route from source to destination
    public function printShortestRoute($distances, $parent, $source, $destination) {
        $path = array();
        $pathIndex = 0;
        $path[$pathIndex] = $destination;
        $pathIndex++;

        $currentVertex = $destination;
        while ($parent[$currentVertex] !== -1) {
            $path[$pathIndex] = $parent[$currentVertex];
            $pathIndex++;
            $currentVertex = $parent[$currentVertex];
        }

        echo "Shortest route from " . $this->getCityName($source) . " to " . $this->getCityName($destination) . ": ";
        for ($i = $pathIndex - 1; $i >= 0; $i--) {
            echo $this->getCityName($path[$i]);
            if ($i > 0) {
                echo " -> ";
            }
        }
        echo "\n";
        echo "Total distance: " . $distances[$destination] . "km\n";
        echo "\n";
    }

    // Helper function to get city name based on index
    private function getCityName($index) {
        $cities = array(
            "Rajshahi",
            "Mymensingh",
            "Dhaka",
            "Barishal",
            "Habiganj",
            "Chattagram"
        );
        return $cities[$index];
    }

    // Function to find the shortest paths from all sources to all destinations using Dijkstra's algorithm
    public function allShortestPaths() {
        for ($source = 0; $source < $this->vertices; $source++) {
            $distances = array_fill(0, $this->vertices, PHP_INT_MAX);
            $distances[$source] = 0;
            $visited = array_fill(0, $this->vertices, false);
            $parent = array_fill(0, $this->vertices, -1);

            for ($count = 0; $count < $this->vertices - 1; $count++) {
                $u = $this->minDistance($distances, $visited);
                $visited[$u] = true;

                for ($v = 0; $v < $this->vertices; $v++) {
                    if (!$visited[$v] && $this->graph[$u][$v] !== 0 && $distances[$u] !== PHP_INT_MAX && $distances[$u] + $this->graph[$u][$v] < $distances[$v]) {
                        $distances[$v] = $distances[$u] + $this->graph[$u][$v];
                        $parent[$v] = $u;
                    }
                }
            }

            for ($destination = 0; $destination < $this->vertices; $destination++) {
                if ($destination !== $source) {
                    $this->printShortestPath($distances, $parent, $source, $destination);
                }
            }
        }
    }
}

// Example usage
$graph = new Graph(6);

$graph->addEdge(0, 1, 240); // Rajshahi to Mymensingh
$graph->addEdge(0, 2, 250); // Rajshahi to Dhaka
$graph->addEdge(0, 3, 360); // Rajshahi to Barishal

$graph->addEdge(1, 0, 240); // Mymensingh to Rajshahi
$graph->addEdge(1, 2, 110); // Mymensingh to Dhaka
$graph->addEdge(1, 4, 310); // Mymensingh to Habiganj

$graph->addEdge(2, 5, 290); // Dhaka to Chattagram
$graph->addEdge(2, 3, 250); // Dhaka to Barishal
$graph->addEdge(2, 4, 170); // Dhaka to Habiganj

$graph->addEdge(3, 1, 110); // Barishal to Mymensingh
$graph->addEdge(3, 5, 340); // Barishal to Chattagram

$graph->addEdge(4, 0, 360); // Habiganj to Rajshahi
$graph->addEdge(4, 3, 230); // Habiganj to Barishal
$graph->addEdge(4, 2, 250); // Habiganj to Dhaka
$graph->addEdge(4, 5, 290); // Habiganj to Chattagram

$graph->addEdge(5, 3, 230); // Chattagram to Barishal
$graph->addEdge(5, 2, 290); // Chattagram to Dhaka

$graph->allShortestPaths();

?>
