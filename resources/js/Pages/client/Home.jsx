import { useState } from "react"

export default function Welcome(){
    const [dark,setDark]=useState(false)
    return <div dark={dark} className="min-h-dvh">
        hello
    </div>
}