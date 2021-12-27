<?php namespace App\Utils;

class AgeValidation
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        if(count($parameters) == 0)
            throw new \InvalidArgumentException("O método age deve receber um parâmetro.");
        $param1 = $parameters[0];
        $param2 = $parameters[1];
        $birthday = \DateTime::createFromFormat('Y-m-d', $value);
        $financial_responsable = $this->getParamValue($validator->getData(), $param1);
        $fullname = $this->getParamValue($validator->getData(), $param2);
        $now = new \DateTime();
        $age = $now->diff($birthday);
        if($age->y < 18){
            if(($financial_responsable == $fullname)||($financial_responsable == null)){
                return false;
            }
        }else{
            if($financial_responsable == null){
                return false;
            }
        }
        return true;
    }

    protected function getParamValue($data, $param)
    {
        if(in_array($param, array_keys($data)))
            return $data[$param];
        throw new \Exception("O parâmetro $param não foi encontrado.");
    }

    protected function setParamValue($validator, $param, $value)
    {
        $valores=$validator->getData();                
        $valores['financial_responsable'] = $value;                
        $validator->setData($valores);
    }
}
?>