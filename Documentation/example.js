let SERVER = 'http://localhost:9394/'

let application = document.getElementById('application')

let list = () => {
  fetch(SERVER + 'products')
  .then(function(response) {
    return response.json()
  })
  .then(function(myJson) {
    console.log(myJson)
    application.innerText = JSON.stringify(myJson)
  })
}
