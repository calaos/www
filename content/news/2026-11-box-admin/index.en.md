---
title: "Manage your Calaos box from the browser"
slug: "box-administration"
date: 2026-11-02
draft: true
summary: "The next Calaos release adds an Admin page to the web interface: updates, network, services, logs, date and time, security and backup, with no terminal needed; the mobile app and the Calaos Home screen join in too."
---

Until now, configuring the box itself (network address, updates, restarting a service) meant opening an SSH session. The next Calaos release brings these everyday tasks into the web interface, in a new **Admin** tab.

The tab is protected by an administration password. Once unlocked, it shows a home page with one card per topic.

![The administration home page: updates, network, services, logs, date and time, MCP access, security, system and settings.](/media/admin-hub-en.webp)

## Update the box

**Why.** See whether the box is up to date and install new versions without the command line.

1. Open **Admin**, then **Updates**.
2. Click **Check for updates**: the packages to update are listed with their current and new versions.
3. Click **Install updates**. The install takes a few minutes; the box stays usable and the app reconnects by itself.

![The Updates page: two updates available, with before and after versions.](/media/admin-updates-en.webp)

## Change the network settings safely

**Why.** Switching to a fixed address or changing the gateway is the kind of change that can lock you out of the box. Here a change is first **tried**: it only stays if you confirm it within two minutes. Otherwise the box goes back to the previous settings.

1. Open **Admin**, then **Network**.
2. Click **Change** next to the interface, then enter the address, gateway and DNS servers.
3. Click **Apply…** and enter the code shown on an approver phone (add one first in **Security**), then **Keep these settings** from the new address.

![The Network page: two interfaces, with address, gateway, DNS and link state.](/media/admin-network-en.webp)

## Manage the box services

**Why.** The box runs several programs (Calaos server, touch screen, Mosquitto, Zigbee2MQTT, InfluxDB, Grafana…). You can see which ones are running, restart one that misbehaves, or choose which ones start with the box.

1. Open **Admin**, then **Services**.
2. Use **Restart**, **Stop** or **Start** on the service's row.
3. The **Start at boot** switch decides what runs at the next boot.

![The Services page: state of each program, start on boot, restart and stop.](/media/admin-services-en.webp)

## Read the logs

The **Logs** page shows the box journal service by service (Calaos server, Mosquitto, Zigbee2MQTT, SSH, network…). Pick the sources and the level of detail, follow new lines live with **Follow**, or download the result to attach to a support request. It is the first place to look when something does not work.

## Set the date and time

**Why.** Scenario schedules and the touch screen rely on the box clock. It must be right, and in the right time zone.

1. Open **Admin**, then **Date and time**.
2. Check the time shown and its sync state.
3. Pick the time zone from the list. If needed, turn off automatic sync (NTP) to set the time by hand.

![The Date and time page: box clock, Europe/Paris time zone, automatic sync.](/media/admin-time-en.webp)

## Protect administration with your phone

**Why.** Sensitive actions, such as changing the admin password, ask for a confirmation code. The code is shown in the Calaos app on the **approver phones** you chose, so knowing the password alone is not enough.

1. Open **Admin**, then **Security**.
2. Click **Add a phone** and follow the steps on that phone.
3. To change the admin password, click **Change** and enter the code shown in the app.

![The Security page: one approver phone registered and the admin password change.](/media/admin-security-en.webp)

## Back up the configuration

The **Settings** page lets you download a backup file of the box configuration and restore it (nothing changes until you confirm). The file contains passwords in clear text (cameras, MCP token…) and is not encrypted: keep it somewhere safe.

![The Settings page: download or restore a backup.](/media/admin-settings-en.webp)

## Confirm with a code on your phone

**Why.** This is two-factor authentication for administration. When you change the admin password from the browser, the box does not rely on the password alone: it asks for a code shown in the Calaos app on your iPhone or Android phone. With the current app, the code never appears in the text of the notification, and it expires after one minute.

1. First register your phone as an approver (previous section).
2. In the browser, start the sensitive action, for example **Change** the admin password.
3. The phone receives a notification: open it and the app shows the code and the time left.
4. Enter the code in the web console before the countdown ends. Do not share it with anyone.

On a phone the notification is the system's own, which cannot be reproduced on a desktop. The screenshot therefore shows the app's **Admin code** screen as rendered by the desktop build, with a made-up code.

![The Admin code screen of the Calaos app: a six-digit code, a remaining-time bar and a Copy button.](/media/mobile-admin-code-en.webp)

## The mobile app Settings

**Why.** The Calaos phone app gets a **Settings** screen organised in two groups. "This phone": the device name and language, the connection (session, certificates, fingerprint or Face ID unlock) and favourites. "Box": box updates and the latest events.

1. Open the app, then **Settings**.
2. Tap a card to open its page.
3. The cards in the **Box** group ask for the administration password, which is separate from your account password, and a secure (https) connection.

![The app Settings screen: Device, Connection and Favorites cards for the phone, Box and Events for the box.](/media/mobile-settings-en.webp)

## Update the box from your phone

**Why.** Install box updates without opening the browser, for instance from the sofa. The app lists the available versions, before and after, like the web page.

1. Open **Settings**, then **Box**, and unlock administration.
2. Tap **Check for updates** if the list is out of date.
3. Tap **Update all**. Installing takes a few minutes; the box stays usable and the app may lose the connection for a moment and come back on its own.

The same screen can restart the box. The screenshot shows a demo box.

![The Box page of the app: two updates available, the Update all and Check buttons, and the box reboot.](/media/mobile-updates-en.webp)

## Set the date and time on the Calaos Home screen

**Why.** If your box is driven by a Calaos Home touch screen, you can set the time zone, automatic time (NTP) or a date and time by hand there, with no keyboard or browser.

1. On the screen, open the configuration panel, then the **Date and time** tile.
2. **Change** sets the time zone.
3. **Stop using NTP** turns automatic time off; **Set** then lets you enter the date and time. Setting it by hand turns automatic time off.

![The Date and time screen of Calaos Home: clock, Europe/Paris time zone, automatic time on and a Set button.](/media/kiosk-time-en.webp)

## Also in there

- **MCP access**: the address and token to give an AI assistant so it can control the house, with a button to regenerate the token.
- **System**: a console and a box reboot.

## Availability

These features come with the next Calaos release; they are not published yet. The mobile app and Calaos Home screen changes are already in development; their release date is not set. The screenshots show a demo home. Feedback is welcome on the [Discord](https://discord.gg/FpBT9yhZxp).
