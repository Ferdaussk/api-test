console.log('Ferdaus');
fetch('http://localhost/oop-problem/api-test/get_api.php')
  .then(response => response.json())
  .then(data => {
      console.log(data.number);
  })
  .catch(error => console.error('Error:', error));
