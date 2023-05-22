/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
  ],
  theme: {
    extend: {
      colors: {
        black: "#21294D",
        date: "#898989",
        gold: "#F0B90B",
        hint: "#c5c5c5",
        inputBg:"#F5F8FD",
        blogText: "#c4c4c4",
        dataBg: "#F4F7FE",
        blue: "#3377E8",
        white: "#ffffff",
        zeroBlack: "#000000",
        blogDetail: "#6F6F6F",
      },
    },
    fontFamily: {
      sans: [
        "bakh-regular",
        "bakh-light",
        "bakh-bold",
        "bakh-black",
        "bakh-extrablack",
        "bakh-extarbold",
      ],
    },
    fontWeight: {
      thin: "100",
      hairline: "100",
      extralight: "200",
      light: "300",
      normal: "400",
      medium: "500",
      semibold: "600",
      bold: "700",
      extrabold: "800",
      black: "900",
    },
  },
  plugins: [],
}

