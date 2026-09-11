+++
# Homepage configuration (TOML): controls banner, feature tiles, images, and CTA.
# - `banner`: top banner buttons and links
# - `feature_icons`: small icon tiles (title, text, url)
# - `feature_images`: larger image tiles (image, title, url, button_text)
# - `CTA`: call-to-action block enabled on homepage

[banner]
  [[banner.button]]
      url = "/contact"
      text = "Get in touch"
      type = "primary"

  [[banner.button]]
      url = "#feature-icons"
      text = "Find out more"

#Details for the box below the banner
[services]
  title = "Church on Sunday"
  text = "We meet at 11 am and 2 pm at [7 Sankt-Johann-Straße, Siegen](geo:50.870626,8.016806)."
  map_location = "New Birth Ministry"

[feature_icons]
  #These feature icons look best if there's an even number of them.
  enable = true

  #Accent is a colour defined in the CSS file. Choose between 1 and 5
  [[feature_icons.tile]]
    icon = "fa-hands-helping"
    icon_pack = "fas"
    accent = "1"
    title = "Serve"
    text = "Growing people who serve our community."
    url = "/serve"

  [[feature_icons.tile]]
    icon = "fa-church"
    icon_pack = "fas"
    accent = "2"
    title = "Meet"
    text = "Meeting together to hear."
    url = "/meet"

  [[feature_icons.tile]]
    icon = "fa-comments"
    icon_pack = "fas"
    accent = "5"
    title = "Speak"
    text = "Speaking encouragement to one-another."
    url = "/speak"

  [[feature_icons.tile]]
    icon = "fa-heartbeat"
    icon_pack = "fas"
    accent = "3"
    title = "Loved"
    text = "Knowing Love. Being Loved."
    url = "/loved"

[feature_images]
#These feature images look best if there's an even number of them.
  enable = true

  [[feature_images.tile]]
    # Use a homepage-only resized copy of the kids image so its display matches
    # the Bible Study image dimensions/aspect ratio
    image = "img/kids_home.jpg"
    title = "Children' Ministry"
    text = "A church for the family."
    url = "/kids"
    button_text = "Learn more"

  [[feature_images.tile]]
    image = "img/bible_studies.jpg"
    title = "Bible Study"
    text = "Want more during the week?"
    url = "/bible-study"
    button_text="Join a group today!"

[CTA]
  enable = true
  heading = "Get in touch!"
  message = "We'd love to hear from you."
+++