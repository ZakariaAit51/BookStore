export default function Card(props:{name:string,image:string,desc:string,price:number}){
    return <div className="bg-white rounded w-[10rem] text-black flex flex-col p-2 justify-center items-center">
            <img src={props.image} alt="" className="w-50 rounded aspect-square bg-red-300"/>
            <h2 className="self-start">name : {props.name}</h2>
            <p className="truncate self-start">desc : {props.desc}</p>
            <p>Price : {props.price}</p>
            <button className="bg-purple-400 hover:bg-purple-300 rounded p-2 cursor-pointer">Buy Now</button>
        </div>
}
