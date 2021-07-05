<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.php */
class __TwigTemplate_7247237c561b6c7d38d958fdc3118b6b587c7c695f88a591faa355d53e92cd05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en_US\">
<?php require 'head.php'; ?>
<body>
<div id=\"page\" class=\"ui stackable grid\">
    <div class=\"sixteen wide column\"></div>
    <?php require 'title.php'; ?>
    <?php require 'menu.php'; ?>
</div>
<div id=\"page\" class=\"ui stackable grid\">
    ";
        // line 11
        echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
        echo "
    <footer>&copy;P.o.P Industries 2020</footer>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.php", "C:\\wamp64\\www\\templates\\php\\index.php");
    }
}
