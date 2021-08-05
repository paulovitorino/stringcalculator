<div id="page-auth">
    <aside>
        <strong>String Calculator</strong>
        <p>A solution for 7Shifts Technical Interview by Paulo Vitorino.</p>
        <p>Made with Vanilla Javascript, PHP and CSS</p>
    </aside>
    <main>
        <div class="main-content">
            <img id="logo" src="./src/assets/images/logo.svg" alt="7Shifts Logo" />
                <form id="formbox" onSubmit="event.preventDefault(); handleSolution();">
                    <textarea
                        placeholder='Type your string here.'
                        name='inputValue'
                        id='inputValue'
                        onInput="blankSolution();"></textarea>
                    <button type='button' onClick="handleSolution();">Add</button>
                    <div id="solutionbox">
                        <div class="separator">Solution</div>
                        <div>
                            <p id="solution"> </p>
                        </div>
                    </div>
                </form>
        </div>
    </main>
</div >