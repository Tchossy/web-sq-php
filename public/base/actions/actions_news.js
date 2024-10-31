const origin_url = window.location.origin

const containerNews = document.getElementById('containerNews')

const listNews = () => {
  return new Promise((resolve, reject) => {
    fetch(`${origin_url}/blog/get/all`)
      .then(response => {
        if (!response.ok) {
          reject(`Erro: ${response.status}`)
        }
        return response.json()
      })
      .then(data => {
        resolve(data)
      })
      .catch(error => {
        reject(`Erro de rede: ${error}`)
      })
  })
}

listNews()
  .then(response => {
    // console.log(response.data[0])
    if (response.data) {
      containerNews.innerHTML = response.data
        .map(news => {
          // Parseando a string de imagens para um array
          let imagesArray = JSON.parse(news.images_news)

          // Usando a primeira imagem do array (ou pode iterar sobre todas)
          let firstImage =
            imagesArray.length > 0
              ? imagesArray[0]
              : `${origin_url}/base/assets/img/default-image.jpg`

          return `
            <article class="post">
              <figure class="feature-image">
                <img src="${firstImage}" alt="${news.title_news}" style="max-height: 300px;"  />
                <span class="cat-meta">
                  <a href="${origin_url}/blog/details/${news.id}">${news.category_news}</a>
                </span>
              </figure>
              <div class="entry-content">
                <h4>
                  <a href="${origin_url}/blog/details/${news.id}" class="title-dots">${news.title_news}</a>
                </h4>
                <p class="blog-info description-dots">
                  ${news.description_news}
                </p>
              </div>
            </article>
          `
        })
        .join('')
    } else {
      containerNews.innerHTML = '<p>Nenhuma notícia disponível no momento.</p>'
    }
  })
  .catch(error => {
    console.error(error)
    containerNews.innerHTML = `<p>Erro ao carregar notícias: ${error}</p>`
  })
