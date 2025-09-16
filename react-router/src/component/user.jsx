import React from 'react'
import { useParams } from 'react-router-dom'
const User = () => {
  let params = useParams();
  return (
    <h2>Hi I am {params.names}</h2>
  )
}

export default User