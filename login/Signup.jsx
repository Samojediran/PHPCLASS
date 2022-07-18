import styled from 'styled-components' ;
import { mobile } from '../Responsive';

const Container = styled.div`
    background : linear-gradient(rgba(255, 255, 255,0.5),rgba(255, 255, 255,0.5)) ,url('https://images.pexels.com/photos/9769860/pexels-photo-9769860.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') center ;
    background-size : cover ;
    height : 100vh ;
    width : 100vw ;
    display: flex ;
    align-items : center ;
    justify-content : center ;
`
const Wrapper = styled.div`
    width : 40% ;
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
    flex-wrap : wrap ;
`
const Input = styled.input`
    flex : 1 ;
    min-width : 40% ;
    margin : 20px 10px 0px 0px ;
    padding : 10px ;
    color : black ;
`
const Agreement = styled.span`
    font-size : 12px ;
    margin : 20px 0px ;
`
const Button = styled.button`
    width : 40% ;
    border : none ;
    padding : 15px 20px ;
    color : white ;
    background-color : teal ;
`

const Signup = () => {
    return (
        <Container>
            <Wrapper>
                <Title>CREATE AN ACCOUNT</Title>
                <Form>
                    <Input placeholder='First Name'/>
                    <Input placeholder='Last Name'/>
                    <Input placeholder='Username'/>
                    <Input placeholder='Email'/>
                    <Input placeholder='Password'/>
                    <Input placeholder='Confirm Password'/>
                    <Agreement>
                        By creating an account, I agree to the processing of my personal data
                        in accordance with the <b>PRIVACY POLICY</b>
                    </Agreement>
                    <Button>CREATE</Button>
                </Form>
            </Wrapper>
        </Container>
    )
}

export default Signup
