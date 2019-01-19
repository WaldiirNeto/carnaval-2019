$(document).ready(function(){
  const form = $('#form-cadastro')
  form.submit(function(e){
    e.preventDefault()
  })

  bootstrapValidate('input[name=nome_bloco]','required:Insira o nome do bloco!')
})
