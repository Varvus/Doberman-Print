<!DOCTYPE html>
<html>
  <head>
    <title>API Example</title>
  </head>
  <body>
    <h1>API Example</h1>
    <div id="output"></div>
    
    <script>
      const axios = require('axios');

      async function generateImage(description) {
        const response = await axios({
          method: 'post',
          url: 'https://api.openai.com/v1/images/generations',
          headers: {
            'Authorization': `Bearer ${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}`,
            'Content-Type': 'application/json'
          },
          data: {
            model: 'image-alpha-001',
            prompt: description
          }
        });
        return response.data.data[0].url;
      }
      
      generateImage('A three legged cat with a bowtie sitting on a cloud')
        .then(function(result) {
          const output = document.getElementById('output');
          const img = document.createElement('img');
          img.src = result;
          output.appendChild(img);
        });
    </script>
  </body>
</html>
