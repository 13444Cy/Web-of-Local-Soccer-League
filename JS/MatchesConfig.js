<script>
// -------------------------------------------------------------
console.log('JavaScript started executing');

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');
    
    const homeTeam = document.getElementById('home_team');
    const awayTeam = document.getElementById('away_team');
    const home_team_goals = document.getElementById('home_team_goals');
    const away_team_goals = document.getElementById('away_team_goals');
    const match_form = document.getElementById('match_form');
    const match_date = document.getElementById('match_date');
    const match_time = document.getElementById('match_time');
    const match_end_time = document.getElementById('match_end_time');
    const error = document.getElementById('error');
    
    // Debug: Check if elements exist
    console.log('homeTeam:', homeTeam);
    console.log('awayTeam:', awayTeam);
    console.log('match_date:', match_date);
    console.log('match_time:', match_time);
    
    if (!homeTeam || !awayTeam || !match_date || !match_time) {
        console.error('One or more form elements not found!');
        return;
    }
    
    // Set default time
    match_time.value = '20:00';
    match_end_time.value = '22:00';
    
    function updateEndTime() {
        if (match_date.value && match_time.value) {
            let start_time = new Date(`${match_date.value}T${match_time.value}:00`);
            let end_time = new Date(start_time.getTime() + (2 * 60 * 60 * 1000)); // 2 hours, not 3
            match_end_time.value = end_time.toISOString().slice(0, 16).replace('T', ' ');
            console.log('Start:', start_time);
            console.log('End:', end_time);
            console.log('End time value:', match_end_time.value);
        } else {
            console.log("Please select a date and time");
        }
    }
    
    function validateTeams() { // Remove event parameter
        if (homeTeam.value && awayTeam.value && homeTeam.value === awayTeam.value) {
            homeTeam.selectedIndex = 0;
            awayTeam.selectedIndex = 0;
            error.style.display = 'block';
            return false;
        } else {
            error.style.display = 'none';
            return true;
        }
    }
    
    // Initialize
    updateEndTime();
    
    // Add event listeners
    match_date.addEventListener('change', updateEndTime);
    match_time.addEventListener('change', updateEndTime);
    homeTeam.addEventListener('change', validateTeams);
    awayTeam.addEventListener('change', validateTeams);
    
    // Form submission validation
    match_form.addEventListener('submit', function(event) {
        if (!validateTeams()) {
            event.preventDefault();
            alert('Home Team and Away Team cannot be the same!');
        }
    });
    
    console.log('Event listeners added successfully');
});

// -------------------------------------------------------------
// Table manipulation code - needs to wait for DOM too
document.addEventListener('DOMContentLoaded', function() {
    console.log('Starting table manipulation');
    
    <?php
    // You need to get $matches from somewhere
    // If SelectMatches.php sets $matches, include it here
    include '../php and database/SelectMatches.php';
    ?>
    
    // FIX: Use json_encode, not json_decode
    const matches = <?php echo isset($matches) ? json_encode($matches) : '[]'; ?>;
    console.log('Matches data:', matches);
    
    if (matches && matches.length > 0) {
        console.log(`Found ${matches.length} matches`);
        
        // Select all rows in the table (skip header row)
        const tableRows = document.querySelectorAll('.matches_table tr:not(:first-child)');
        
        console.log(`Found ${tableRows.length} table rows`);
        
        for(let i = 0; i < Math.min(matches.length, tableRows.length); i++) {
            const row = tableRows[i];
            const selects = row.querySelectorAll('select');
            
            if (selects.length >= 2) {
                // First select is home team
                selects[0].value = matches[i]['home_team'] || '';
                // Second select is away team
                selects[1].value = matches[i]['away_team'] || '';
                console.log(`Row ${i}: Set home=${selects[0].value}, away=${selects[1].value}`);
            }
        }
    } else {
        console.log('No matches data available');
    }
});
</script>