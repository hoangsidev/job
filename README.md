# Module @aia-digital/aiadirect-validator-module

This module is designed to validate data input

# How to use @aia-digital/aiadirect-validator-module

1. Install package

```bash
npm install @aia-digital/aiadirect-validator-module@0.2.7
or
npm install @aia-digital/aiadirect-validator-module
```

2. Import function name to project

```bash
import { loginValidator, loginValidatorCustomMessages } from '@aia-digital/aiadirect-validator-module';
```

3. Using
```bash
const validateData = loginValidator({
  email: 'sihoang@gmail.com',
  password: '123456',
});
console.log(validateData);
if (validateData.success) console.log('Do somethings.');
```

# How to create function validate data in @aia-digital/aiadirect-validator-module
1. Clone @aia-digital/aiadirect-validator-module

```bash
https://dev.azure.com/aiasgdirecttest/AIA%20SG%20Direct%20Test-Dev/_git/aiadirect-validator-module
```

2. Copy sample file "loginValidator", and update schemal validator
```bash
const schemaLogin = {
  type: 'object',
  required: ['email', 'password'],
  properties: {
    email: { type: 'string' },
    password: { type: 'string', minLength: 6 }
  }
};
```

Follow Validation keywords here https://www.npmjs.com/package/ajv#validation-keywords

3. Write test cover for function

4. Update version in package.json

5. If you wanna custom errors message, please follow schema of sample "loginCustomMessages"

```bash
const schema = {
  type: 'object',
  required: ['email', 'password'], // check required field here
  errorMessage: {
    required: { // Custom message for required field here
      email: 'Please enter email.',
      password: 'Please enter password.'
    }
  },
  additionalProperties: true,
  properties: {
    email: { // Check properties field here
      type: 'string', 
      errorMessage: {
        type: 'Email should be string.' // Custom message for field here
      }
    },
    password: {
      type: 'string',
      minLength: 6,
      errorMessage: {
        type: 'Password should be string.',
        minLength: 'Password length should be >= 6 characters.'
      }
    }
  }
};
```
And then Write test cover for function ^^

Goodluck!

### Note: when use, please reinstall package when have any update function
