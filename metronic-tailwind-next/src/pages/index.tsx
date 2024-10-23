export default function Home() {
  return (
    <>
      <div className="w-full">
        <label className="form-label mb-2" htmlFor="range_1">
          Example range
        </label>
        <input className="range" id="range_1" max="10" min="0" type="range" />
      </div>
    </>
  );
}
