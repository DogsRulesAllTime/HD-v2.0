 <div class="formproblem">
        <form action="insert.php" method="post">
           <div class="typeprob">
            <input class="radio" name="radio" type="radio" value="pc" id="radio">
            <label for="radio">ПК</label>
            <input class="radio" name="radio" type="radio" value="printer" id="radiotwo">
             <label for="radiotwo">Принтер</label>
            <input class="radio"  name="radio" type="radio" value="po" id="radiothree">
             <label for="radiothree">Программа</label>
            <input class="radio" name="radio" type="radio" value="cad" id="radiofour">
             <label for="radiofour">КАД системы</label>
        </div>
        <div class="textprob">

                <textarea name="comment"></textarea>
                <input type="submit" value="Отправить" name="send">

        </div>
        </form>
    </div>