	


<style>
    #sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0 0 2.5em; float: left; margin-right: 10px; }
    #sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 120px; }
</style>
<script>
    $(function() {
        $( "#sortable1, #sortable2" ).sortable({
            connectWith: ".connectedSortable"
        }).disableSelection();
    });
</script>


<div class="demo">

    <ul id="sortable1" class="connectedSortable">
        <li class="ui-state-default">Item 1</li>
        <li class="ui-state-default">Item 2</li>
        <li class="ui-state-default">Item 3</li>
        <li class="ui-state-default">Item 4</li>
        <li class="ui-state-default">Item 5</li>
    </ul>

    <ul id="sortable2" class="connectedSortable">
        <li class="ui-state-highlight">Item 1</li>
        <li class="ui-state-highlight">Item 2</li>
        <li class="ui-state-highlight">Item 3</li>
        <li class="ui-state-highlight">Item 4</li>
        <li class="ui-state-highlight">Item 5</li>
    </ul>

</div>