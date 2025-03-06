<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">

<title>HappeeAntz - Hive Hustle Hire</title>
<link rel="icon" type="image/x-icon" href="./images/HAPPYANTZ.PNG">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              DEFAULT: "#3A73C9",
              foreground: "#FFFFFF",
            },
            secondary: {
              DEFAULT: "#FDCB58",
              foreground: "#000000",
            },
            accent: {
              DEFAULT: "#E78B00",
              foreground: "#FFFFFF",
            },
            "light-bg": "#F4F6F9",
            "dark-blue-start": "#003366",
            "dark-blue-end": "#005f99",
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          backgroundImage: {
            "hero-gradient": "linear-gradient(to right, #003366, #005f99)",
          },
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .tab-active {
        @apply bg-white text-primary border-b-2 border-primary;
      }
      .tab-inactive {
        @apply bg-gray-100 text-gray-600 hover:bg-gray-200;
      }
    }
.boogaloo-regular {
  font-family: "Boogaloo", serif;
  font-weight: 400;
  font-style: normal;
}
  </style>
</head>
<body class="bg-light-bg text-foreground font-sans min-h-screen">
  <div class="flex min-h-screen flex-col">