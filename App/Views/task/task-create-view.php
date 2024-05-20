<div>
    <h1>Task List</h1>

    <form action="/task/dashboard" method="POST">
        <div>

            <input type="text" name="title" placeholder="Enter Task Title">

            <input type="date" name="deadline" >


            <select name="status" >
                <option value="done">Pabeigts</option>
                <option value="not done" selected>Nepabeigts</option>
            </select>
            <button type="submit" >Create Task</button>
        </div>
    </form>

</div>