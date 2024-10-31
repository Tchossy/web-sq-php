const urlParams = new URLSearchParams(window.location.search)
const path = window.location.pathname // Obtém o caminho da URL

const getBlogIdFromUrl = () => {
  const segments = path.split('/') // Divide a URL em partes
  return segments[segments.length - 1] // Retorna o último segmento, que é o ID
}

const blogId = getBlogIdFromUrl() // Pega o ID do blog

const getBlogDetails = async id => {
  try {
    const response = await fetch(`/blog/get/one/${id}`)
    const data = await response.json()

    if (response.ok) {
      // Parseando a string de imagens para um array
      let imagesArray = JSON.parse(data.images_news)

      // Usando a primeira imagem do array (ou pode iterar sobre todas)
      let firstImage =
        imagesArray.length > 0
          ? imagesArray[0]
          : `${origin_url}/base/assets/img/default-image.jpg`

      console.log()

      // Atualizando os detalhes no HTML
      document.getElementById('image-new').src = `${firstImage}`
      document.getElementById('inner-title').textContent = data.title_news
      document.getElementById('author-name').textContent = data.author_news
      document.getElementById('category-new').textContent = data.category_news
      document.getElementById('epigraph-news').textContent = data.epigraph_news
      document.getElementById('date-news').textContent = new Date(
        data.date_news
      ).toLocaleDateString()
      document.getElementById('description-news').textContent =
        data.description_news
    } else {
      console.error('Erro ao carregar os detalhes:', data.message)
    }
  } catch (error) {
    console.error('Erro ao buscar detalhes:', error)
  }
}

// Carregar os detalhes
getBlogDetails(blogId)

const currentUrl = window.location.href
const postTitle = document.querySelector('.inner-title').textContent

document.getElementById(
  'share-facebook'
).href = `http://www.facebook.com/sharer.php?u=${currentUrl}`

document.getElementById(
  'share-whatsapp'
).href = `https://wa.me/?text=${encodeURIComponent(postTitle)}%20${currentUrl}`

document.getElementById(
  'share-linkedin'
).href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(
  currentUrl
)}`

document.getElementById(
  'share-twitter'
).href = `https://twitter.com/share?url=${currentUrl}&text=${encodeURIComponent(
  currentUrl
)}`

document.getElementById(
  'share-pinterest'
).href = `https://pinterest.com/pin/create/button/?url=${currentUrl}&description=${encodeURIComponent(
  postTitle
)}`
