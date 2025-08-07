<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Notes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { font-family: sans-serif; margin: 0; padding: 2em; background: #f9f9f9; }
    h1 { font-size: 2em; margin-bottom: 1em; }
    textarea { width: 100%; height: 200px; font-size: 1em; }
    button { margin-top: 1em; padding: 0.5em 1em; font-size: 1em; }
    #status { margin-top: 0.5em; color: #666; }
  </style>
</head>
<body>
  <h1>My Notes</h1>
  <textarea id="notes" placeholder="Write your notes here..."></textarea>
  <br>
  <button onclick="saveNotes()">Save</button>
  <span id="status"></span>
  <script>
    // Load saved notes from localStorage on page load
    window.onload = function() {
      document.getElementById('notes').value = localStorage.getItem('my_notes') || '';
    };

    function saveNotes() {
      const notes = document.getElementById('notes').value;
      localStorage.setItem('my_notes', notes);
      document.getElementById('status').textContent = 'Saved!';
      setTimeout(() => { document.getElementById('status').textContent = ''; }, 1500);
    }
  </script>
</body>
</html>
