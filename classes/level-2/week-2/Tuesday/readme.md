How to upload php files to a server.
Look for free hosting platforms.
hostgator.com

import Weather from "./WeatherDisplay";

const ShowBtn = ({countries, isShow, id})=>{
    const country = countries.find(element => element.name === id);
    if(isShow){
        return (
            country ? 
            <>
                <h1>{country.name}</h1>
                <div>{country.capital}</div>
                <div>{country.area}</div>
                <h3>Languages</h3>
                <ul>
                    {country.languages.map((lang,index) => 
                        <li key={index}>{lang.name}</li>
                    )}
                </ul>
                <img src={country.flag} alt="Country flag"/>

                <Weather country={country}/>
            </>
            :
            "No country provided yet"
        )
    }
    return null
}

export default ShowBtn;
Footer
