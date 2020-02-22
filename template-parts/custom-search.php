<div class="custom-search-container">
    <h2 class="heading-size-3">Property Search</h2>
    <form action="/search" method="get">
        <div class="form-group-search">
            <label for="custom-search-selector">Search by:</label>
            <select name="selector" class="search-selector" id="custom-search-selector" >
                <option value="address">Location</option>
                <option value="community_name">Name</option>
            </select>
        </div>
        <div class="form-group-search">
            <input type="text" name="search_text" class="search-field" placeholder="zip, address, or city">
        </div>
        <div class="form-group-search">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>