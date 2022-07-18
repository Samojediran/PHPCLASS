import styled from 'styled-components' ;
import { mobile } from '../Responsive';

const Container = styled.div`
    background : linear-gradient(rgba(255, 255, 255,0.5),rgba(255, 255, 255,0.5)) ,url('https://images.pexels.com/photos/9769852/pexels-photo-9769852.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') center ;
    background-size : cover ;
    height : 100vh ;
    width : 100vw ;
    display: flex ;
    align-items : center ;
    justify-content : center ;
`
const Wrapper = styled.div`
    width : 25% ;
    padding : 20px ;
    background-color : #fff ;
    ${mobile({width : '75%'})} ;
`
const Title = styled.h1`
    font-size : 24px ;
    font-weight : 300 ;
`
const Form = styled.form`
    display : flex ;
    flex-direction : column ;
`
const Input = styled.input`
    flex : 1 ;
    min-width : 40% ;
    margin : 10px 0px  ;
    padding : 10px ;
`

const Button = styled.button`
    width : 40% ;
    border : none ;
    padding : 10px 10px ;
    color : white ;
    background-color : teal ;
    margin-bottom : 10px ;
`
const Link = styled.a`
    margin : 5px 0px ;
    font-size : 12px ;
    color : none ;
    cursor : pointer ;
`

const Login = () => {
    return (
        <Container>
            <Wrapper>
                <Title>SIGN IN</Title>
                <Form>
                    <Input placeholder='Username'/>
                    <Input placeholder='Password'/>
                    <Button>LOGIN</Button>
                    <Link>FORGOTTEN PASSWORD</Link>
                    <Link>CREATE A NEW ACCOUNT</Link>
                </Form>
            </Wrapper>
        </Container>
    )
}

export default Login