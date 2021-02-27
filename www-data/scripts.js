document.querySelectorAll('.datacalendario').forEach((el) => {
  const em = document.createElement('span')
  em.innerHTML = '<i class="fas fa-fw fa-calendar-alt"></i>'
  el.prepend(em)
})
if (window.location.href.match(/private/)) {
  document.querySelectorAll('.private').forEach((el) => {
    let text = el.innerHTML
    text = text.replace(/[a-z]/g, 'x')
    text = text.replace(/[A-Z]/g, 'X')
    text = text.replace(/[0-9]/g, '1')
    el.innerHTML = text
  })
  document.querySelectorAll('a').forEach((e) => {
    e.href = e.href
      .replace(/[a-z]/g, 'x')
      .replace(/[A-Z]/g, 'X')
      .replace(/[0-9]/g, '1')
  })
  document.querySelector('.privateauthorization').innerHTML = 'Non autorizzo '
  document.querySelector('.privatemessage').innerHTML = 'Utilizzo riservato.'
  document.title += ' /w Privacy'
}
const download = (filename, text) => {
  text = text.replace(/<!\-\-(.|s)*?\-\->/, '')
  text = `
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>${document.title}</title>
    <link rel="stylesheet" href="${window.location.origin}/styles/style.css" />
  </head>
  <body  class="A4">
   ${text}
  </body>
</html>

  `
  var element = document.createElement('a')
  element.setAttribute(
    'href',
    'data:text/html;charset=utf-8,' + encodeURIComponent(text),
  )
  element.setAttribute('download', filename)

  //   element.style.display = 'none'
  element.innerText = 'Download the Page'
  document.querySelector('.content').prepend(element)

  //   element.click()

  //   document.body.removeChild(element)
}
const getFonts = () => {
  let fonts = []
  const elements = document.querySelectorAll('*')
  for (let i = 0; i < elements.length; i++) {
    const fontFamily = window
      .getComputedStyle(elements[i])
      .getPropertyValue('font-family')

    if (!fonts.includes(fontFamily)) {
      fonts.push(fontFamily)
    }
  }
  console.log(fonts)
}
getFonts()
let clicked = false

document.body.addEventListener('click', () => {
  document.querySelectorAll('script').forEach((e) => {
    e.remove()
  })
  if (!clicked) {
    download(document.title, document.body.innerHTML)

    clicked = true
  }
})
