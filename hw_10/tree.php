<?php


class TreeNode
{
    public string $value;
    public ?object $left;
    public ?object $right;

    public function __construct($value, $left = null, $right = null)
    {

        $this->value = $value;
        $this->left = $left;
        $this->right = $right;
    }
}

/**
 * @throws Exception
 */
function parseExpression($expression)
{
    $expression = str_replace(" ", "", $expression);

    $tokens = preg_split('/([-+*^\/()])/', $expression, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    $tokens = array_values($tokens);
    $index = 0;

    return parseAddSub($tokens, $index);
}

/**
 * @throws Exception
 */
function parseAddSub($tokens, &$index)
{

    $left = parseMulDiv($tokens, $index);

    while ($index < count($tokens) && in_array($tokens[$index], ['+', '-'])) {
        $operator = $tokens[$index];
        $index++;
        $right = parseMulDiv($tokens, $index);
        $left = new TreeNode($operator, $left, $right);
    }

    return $left;
}

/**
 * @throws Exception
 */
function parseMulDiv($tokens, &$index)
{
    $left = parseFactor($tokens, $index);
    while ($index < count($tokens) && in_array($tokens[$index], ['*', '/', '^'])) {
        $operator = $tokens[$index];
        $index++;

        $right = parseFactor($tokens, $index);
        $left = new TreeNode($operator, $left, $right);
    }

    return $left;
}

/**yhyjy
 * @throws Exception
 */
function parseFactor($tokens, &$index)
{
    if ($index >= count($tokens)) {
        throw new Exception("Неправильное выражение");
    }

    $token = $tokens[$index];
    $index++;

    if ($token == '(') {
        $node = parseAddSub($tokens, $index);
        if ($tokens[$index] != ')') {
            throw new Exception("Неправильная расстановка скобок");
        }
        $index++;

        return $node;
    }

    if ($token == '-' && $index < count($tokens) && is_numeric($tokens[$index])) {
        $number = '-' . $tokens[$index];
        $index++;

        return new TreeNode($number);
    }

    return new TreeNode($token);
}


/**
 * @throws Exception
 */
function evaluateExpression($node)
{
    global $variables;
    if (is_numeric($node->value)) {
        return (float)$node->value;
    }

    if (in_array($node->value, ['x', 'y', 'z'])) {
        return $variables[$node->value];
    }
    if (!in_array($node->value, ['+', '-', '*', '/', '^'])) {
        throw new Exception("Неизвестный оператор [$node->value]");
    }

    $leftValue = evaluateExpression($node->left);
    $rightValue = evaluateExpression($node->right);

    switch ($node->value) {
        case '+':
            return $leftValue + $rightValue;
        case '-':
            return $leftValue - $rightValue;
        case '*':
            return $leftValue * $rightValue;
        case '^':
            return pow($leftValue, $rightValue);
        case '/':
            if ($rightValue == 0) {
                throw new Exception("Деление на ноль");
            }

            return $leftValue / $rightValue;
    }

    throw new Exception("Этот код не должен выполниться");
}

$expression = "32.5 + (-3 + 2*x) + 5 * (y - 2) / 2 - 3 * z";
$variables = ['x' => 2, 'y' => 3, 'z' => -3];

try {
    $root = parseExpression($expression);
    $result = evaluateExpression($root);

    $vx = $variables['x'];
    $vy = $variables['y'];
    $vz = $variables['z'];

    echo "Выражение: [$expression]\n";
    echo "Переменные: [x=$vx, y=$vy, z=$vz]\n";
    echo "Результат: [$result]\n\n";
} catch (Exception $e) {
    echo "Ошибка $e\n\n";
}
