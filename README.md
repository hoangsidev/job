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
  email: 1,
  password: 1,
});
console.log(validateData);
```

### Known issue: the link will invalidate when you install new package in consumer, simply run the link command again
