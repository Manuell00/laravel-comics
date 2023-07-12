    <!-- Definisco il Jumbotron -->
    <div id="jumbotron">
        <div class="bg-container">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
            <span id="current-series">CURRENT SERIES</span>
        </div>

        <!-- Definisco il contenitore delle cards -->
        <div class="cards-container">

            <!-- Inserisco le carte prendendole dal componente AppCards -->
            <AppCards v-for="(card, index) in comics" :key="index" :details="card" />

            <!-- Definisco la linea per il button LOAD MORE -->
            <div id="load">
                <span id="load-button">LOAD MORE</span>
            </div>
        </div>
    </div>