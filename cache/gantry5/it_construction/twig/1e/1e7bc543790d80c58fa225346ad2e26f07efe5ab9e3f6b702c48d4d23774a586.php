<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/scrollreveal-js.html.twig */
class __TwigTemplate_0552b2522ef6fd09561d5c32090942af68dd4a0995fca27d5810861be0b36a78 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/scrollreveal-js.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        if ($this->getAttribute(($context["particle"] ?? null), "enabled", [])) {
            // line 5
            echo "\t\t";
            $this->displayParentBlock("javascript_footer", $context, $blocks);
            echo "
\t\t<script src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/scrollReveal.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t<script type=\"text/javascript\">
\t\t\twindow.sr = new scrollReveal({ mobile: ";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "mobile", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "mobile", []), "false")) : ("false")));
            echo " });
\t\t</script>
\t";
        }
    }

    public function getTemplateName()
    {
        return "@particles/scrollreveal-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/scrollreveal-js.html.twig", "C:\\xampp\\htdocs\\Jommla3\\templates\\it_construction\\particles\\scrollreveal-js.html.twig");
    }
}
