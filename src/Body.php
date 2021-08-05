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
                <div>
                    <textarea
                        placeholder='Type your string here.'
                        name='inputValue'
                        id='inputValue'
                        onInput="blankSolution();"
                    ></textarea>
                </div>
                <div>
                    <button type='button' onClick="handleSolution();">Add</button>
                </div>
            <div>Solution</div>
            <div>
                <p id="solution"> </p>
            </div>
            </form>
        </div>
    </main>
</div >