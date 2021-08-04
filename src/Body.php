<script>
//    function handleSolution() {
//        document.getElementById("solution").innerHTML = "adicionou";
//    }
</script>

<div>
    <aside>
        <strong>String Calculator</strong>
        <p>A solution for 7Shifts Technical Interview by Paulo Vitorino.</p>
        <p>Made with Vanilla Javascript, PHP and CSS</p>
    </aside>
    <main>
        <div>
            <img src="./src/assets/images/logo.svg" alt="7Shifts Logo" />
            <form onSubmit="event.preventDefault(); handleSolution();">
                <input
                    type='text'
                    placeholder='Type your string here.'
                    name='inputValue'
                    id='inputValue'
                    onChange="blankSolution();"
                />
                <button type='button' onClick="handleSolution();">Add</button>
            <div>Solution</div>
            <div>
                <p id="solution"> </p>
            </div>
            </form>
        </div>
    </main>
</div >