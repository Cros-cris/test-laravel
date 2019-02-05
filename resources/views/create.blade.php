<html>
  <body>
    <h1> create een Nieuw Project</h1>
      <form method="post" action="/">
          {{ csrf_field() }}
          <div>
            <input type = "text" name = "project" placeholder="Project naam">
          </div>
          <div>
            <textarea  name = "beschrijving" placeholder="beschrijving"></textarea>
          </div>
          <div>
        <button type="submit">create</button>
        </div>
    </form>
  </body>
</html>
