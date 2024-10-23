import "../styles/globals.css";

import type { AppProps } from "next/app";
import dynamic from "next/dynamic";

import Footer from "../components/Footer";
import Header from "../components/Header";
import SearchModal from "../components/SearchModal";
import Sidebar from "../components/Sidebar";

const GlobalInit = dynamic(() => import("../components/GlobalInit"), {
  ssr: false,
});

export default function App({ Component, pageProps }: AppProps) {
  return (
    <>
      <div className="flex grow">
        <Sidebar />
        <div className="wrapper flex grow flex-col">
          <Header />
          <main className="grow content pt-5" id="content" role="content">
            <div className="container-fixed" id="content_container"></div>
            <div className="container-fixed">
              <Component {...pageProps} />
            </div>
          </main>
          <Footer />
        </div>
      </div>
      <SearchModal />
      <GlobalInit />
    </>
  );
}
