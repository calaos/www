---
title: "Calaos, open source home automation"
description: "Calaos is open source home automation under the GPLv3 that runs entirely in your home: server, mobile app, web interface and touchscreens."
skip_to: how-it-works

hero:
  title: "Open source home automation, **in your home.**"
  lead: "Control lights, shutters, heating, music and cameras from your phone, a touchscreen or a wall panel. Everything stays in your home: no cloud, no subscription."
  image:
    src: media/hero.jpg
    alt: ""
    width: 1600
    height: 1067
  buttons:
    - label: "Getting started"
      url: "https://doc.calaos.fr/en/getting_started/"
      icon: arrow
    - label: "Learn more"
      url: "#how-it-works"
      icon: down
  trust:
    - icon: lock
      text: "100% local"
    - icon: check
      text: "No subscription"
    - icon: code
      text: "Open source, GPLv3"

kiosk:
  image:
    src: media/kiosk-home-en.webp
    alt: "Calaos Home screen on a touchscreen: the list of rooms of the house"
    width: 1024
    height: 768
  caption: "The Calaos home screen on a touchscreen."

how:
  id: "how-it-works"
  eyebrow: "How it works"
  title: "Three steps, **one home**."
  text: "From the hardware you already own to an interface the whole family uses."
  steps:
    - title: "Connect your hardware"
      text: "Calaos talks to the controllers, buses and devices you already have, without going through an external service."
      note: "Wago, KNX, Philips Hue, MQTT, ESPHome…"
    - title: "Describe your home"
      text: "With Calaos Installer, you set up rooms, devices and scenarios once, then send them to your home."
      note: "Calaos Installer, on your computer"
    - title: "Control everything, anywhere"
      text: "The same settings on your phone, wall panel, touchscreen and browser."
      note: "Also by text or voice, through MCP"

daily:
  id: "day-to-day"
  eyebrow: "Day to day"
  title: "What you already **control**, made simple."
  rows:
    - title: "Lights"
      icon: bulb
      text: "Switch, dim and group them: one room, one floor or the whole house."
      tags:
        - "Rooms"
        - "Groups"
        - "Dimming"
      photo:
        src: media/maison_5_2008082194-IMG_9340.jpg
        alt: ""
        width: 760
        height: 1140
      screen:
        src: media/mobile-lights-en.webp
        alt: "Calaos mobile app: the living room page with its shutters and lights"
        width: 340
        height: 736
    - title: "Heating"
      icon: thermo
      text: "A setpoint per room, weekly schedules, the temperature curve."
      tags:
        - "Setpoints"
        - "Schedules"
        - "History"
      photo:
        src: media/maison_4_20080819-IMG_9193.jpg
        alt: ""
        width: 760
        height: 507
      screen:
        src: media/mobile-heating-en.webp
        alt: "Calaos mobile app: setting the heating setpoint"
        width: 480
        height: 1039
    - title: "Security"
      icon: cam
      text: "Live cameras, sensors, alarm: the footage stays in your home."
      tags:
        - "Cameras"
        - "Alarm"
        - "Local"
      photo:
        src: media/maison_1_2008081460-IMG_8983.jpg
        alt: ""
        width: 760
        height: 507
      screen:
        src: media/mobile-rooms-en.webp
        alt: "Calaos mobile app: the list of rooms"
        width: 340
        height: 736
  also:
    - title: "Shutters"
      icon: blind
      text: "Raise, lower, or schedule them for whenever suits you."
    - title: "Music"
      icon: music
      text: "One source per room, from your audio server."
    - title: "Scenarios"
      icon: scene
      text: "One button, several actions: “Good night”, “I’m leaving”."
    - title: "Energy"
      icon: bolt
      text: "Follow your readings and keep the history at home."
  note: "Mood photos."

interfaces:
  id: "interfaces"
  eyebrow: "Interfaces"
  title: "One home, **many ways** to control it."
  tabs:
    - label: "Mobile"
      text: "The mobile app connects to your Calaos server with its address, your username and your password. It gives you access to rooms and their devices: lights (dimming and color), shutters, outlets, sensors, climate control. You can run a scenario, watch your cameras and control audio players. The display follows what happens in the house live, and a push notification opens the event it is about. The interface is available in French, English and German."
      image:
        src: media/mobile-favorites-en.webp
        alt: "Calaos mobile app: favorites with scenarios, lights, shutters and heating"
        width: 480
        height: 1039
    - label: "Wall panel"
      text: "The wall panel is a touchscreen mounted on the wall, running Calaos firmware on an ESP32-P4. It connects over Ethernet or Wi-Fi, finds the server on your network and pairs with it using a short code. The server sends it its pages: light switches, temperature, scenarios, shutters, climate, clock and screensaver. A 720 × 720 model also includes two relays. The firmware updates from the server and rolls back to the previous version if an update fails."
      image:
        src: media/wall-panel.webp
        alt: "Calaos wall panel: control tiles (lights, shutters, temperature, scenario)"
        width: 720
        height: 720
    - label: "Touchscreen"
      text: "Calaos Home also comes in a full-screen version for a fixed touchscreen running Calaos OS. It offers the same features as the mobile app: rooms, scenarios, cameras and audio players, with an on-screen keyboard. You can place movable widgets on it, such as a clock, a note or the weather. Network, language and system updates are all set from the screen itself."
      image:
        src: media/kiosk-room-en.webp
        alt: "Calaos Home on a touchscreen: the living room page with its lights, shutters and scenarios"
        width: 1024
        height: 768
    - label: "Browser"
      text: "The web interface is served by the Calaos server itself: just open its address in a browser, with nothing to install. It shows rooms and their devices, scenarios, cameras and audio players. The display updates live, without reloading the page."
      image:
        src: media/web-home.webp
        alt: "Calaos web interface in a browser: the list of rooms"
        width: 1216
        height: 760
  extras:
    - title: "Assistant, through MCP"
      icon: ai
      text: "“Turn off everything downstairs and set the bedroom to 19 degrees.” An AI assistant connected to your home."

compat:
  id: "compatibility"
  eyebrow: "Compatibility"
  title: "Your hardware, **as it is**."
  text: "A few examples of the supported protocols and devices. The full list is in the documentation."
  groups:
    - title: "Controllers and buses"
      items:
        - "Wago Modbus"
        - "DALI"
        - "KNX"
        - "1-Wire"
        - "DMX"
    - title: "Wireless and network"
      items:
        - "MQTT"
        - "ESPHome"
        - "Philips Hue"
    - title: "Cameras"
      items:
        - "Reolink"
        - "Axis"
        - "Foscam"
        - "Synology"
    - title: "Audio"
      items:
        - "Squeezebox / LMS"
        - "Roon"
        - "Denon"
        - "Onkyo"
        - "Yamaha"
    - title: "Energy and metering"
      items:
        - "InfluxDB"
    - title: "Going further"
      items:
        - "Lua scripts"
        - "Local API"
        - "MCP"

why:
  id: "why-calaos"
  eyebrow: "Why Calaos"
  title: "A home that **belongs to you**."
  items:
    - title: "Open"
      icon: code
      text: "GPLv3-licensed code: you can read it, change it and host it yourself."
    - title: "Local"
      icon: lock
      text: "Everything works without internet. Your data stays in your home."
    - title: "Built to last"
      icon: home
      text: "Standard protocols and hardware of your choice: nothing depends on a single manufacturer."
    - title: "Actively developed"
      icon: undo
      text: "The project is active on GitHub: public releases, fixes, new features."
    - title: "A community"
      icon: people
      text: "Users and contributors helping each other on Discord and GitHub."

start:
  id: "getting-started"
  eyebrow: "Get started"
  title: "A mini PC, a USB stick, **one afternoon**."
  text: "Calaos runs on an x86_64 mini PC. Prepare a USB stick, install, then describe your home."
  buttons:
    - label: "Download Calaos OS"
      url: "https://calaos.fr/download/"
      icon: arrow
    - label: "Read the documentation"
      url: "https://doc.calaos.fr/en/"
  steps:
    - title: "Download the Calaos OS image"
      text: "A ready-to-use Debian base."
    - title: "Write it to a USB stick"
      text: "Then boot the mini PC from it."
    - title: "Describe your home"
      text: "With Calaos Installer."
    - title: "Follow the documentation"
      text: "doc.calaos.fr, step by step."

community:
  id: "community"
  eyebrow: "Community"
  title: "An **open** project."
  cards:
    - title: "Discord"
      icon: discord
      text: "Ask questions, show off your setup."
      link:
        label: "Join the Discord"
        url: "https://discord.gg/FpBT9yhZxp"
    - title: "GitHub"
      icon: github
      text: "Code, issues and contributions, open to everyone."
      link:
        label: "github.com/calaos"
        url: "https://github.com/calaos"

support:
  id: "support"
  title: "Support Calaos"
  text: "The project needs your time as well as your money. There is no minimum amount: give what you like."
  time:
    title: "Give time"
    items:
      - title: "Developers"
        text: "Contact the team to see the ongoing tasks and get pointed in the right direction."
        link:
          label: "Write on Discord"
          url: "https://discord.gg/FpBT9yhZxp"
      - title: "Documentation"
        text: "Help us improve the documentation."
        link:
          label: "Open the documentation"
          url: "https://doc.calaos.fr/en/"
      - title: "Translations"
        text: "Translate the various pieces of software."
      - title: "Design"
        text: "Help with the website and the interfaces."
      - title: "Feedback"
        text: "Report a problem you ran into."
        link:
          label: "Open an issue"
          url: "https://github.com/calaos/calaos_base/issues"
  money:
    title: "Donate money"
    text: "Donations pay for the servers and subscriptions behind Calaos services, for hardware to develop and add support for new devices, and for promoting the project."
    paypal: "Donate with PayPal"
    bitcoin: "Bitcoin address"
---
