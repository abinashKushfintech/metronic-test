<p>
	<a href="https://keenthemes.com/metronic">
		<img src="https://keenthemes.com/static/metronic/tailwind/docs/dist/assets/media/app/default-logo.svg" alt="Metronic"/>
	</a>
</p>

## Setup example

- Copy the `src` folder from the `metronic-tailwind-html` package and paste it into the NextJs `src` directory.


- Rename the copied folder to `metronic` so that the directory structure should now look like this: `src/metronic`. This step imports the necessary styles and assets from the original HTML package into your NextJs project.


- In the `src/metronic/core` folder, delete the unnecessary `index.ts` file. This file is not needed for Single Page Application (SPA) integration as it could cause conflicts. Instead, rename the `index.spa.ts` file to `index.ts` to ensure proper integration.


- Replace HTML initialization with default instance export in `src/metronic/app/layouts/demo1.js`.

  Replace the code part below:

    ```javascript
    KTDom.ready(() => {
        KTLayout.init();
    });
    ```
  with
    ```javascript
    export default KTLayout;
    ```

- Copy the `media` folder from the `metronic-tailwind-html` package's `dist/assets/media` directory into your NextJs project's `public` directory.


- Create `public/fonts` folder and move all the files listed below to this folder.
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-duotone.svg`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-duotone.ttf`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-duotone.woff`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-filled.svg`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-filled.ttf`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-filled.woff`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-outline.svg`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-outline.ttf`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-outline.woff`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-solid.svg`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-solid.ttf`
  - `metronic/vendors/keenicons/duotone/fonts/keenicons-solid.woff`


- Install the required Node.js packages by running `npm install`. Start the NextJs development server by running `npm run dev`.