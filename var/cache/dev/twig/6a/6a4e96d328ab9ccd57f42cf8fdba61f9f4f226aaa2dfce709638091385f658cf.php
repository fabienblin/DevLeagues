<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1f4bb0281e07ebb29f75ddb1f93a86291460d898cdaecb32146f79cb3a3f30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b60707ca6a8626d3652c74567ca7be7b4b0882d819964ee6cb69313cdb26f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b60707ca6a8626d3652c74567ca7be7b4b0882d819964ee6cb69313cdb26f37->enter($__internal_4b60707ca6a8626d3652c74567ca7be7b4b0882d819964ee6cb69313cdb26f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8d6ece859986e8de1dc9c5eac84d1a431747ab47fb94c7c609cadeb67eaa17dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6ece859986e8de1dc9c5eac84d1a431747ab47fb94c7c609cadeb67eaa17dd->enter($__internal_8d6ece859986e8de1dc9c5eac84d1a431747ab47fb94c7c609cadeb67eaa17dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4b60707ca6a8626d3652c74567ca7be7b4b0882d819964ee6cb69313cdb26f37->leave($__internal_4b60707ca6a8626d3652c74567ca7be7b4b0882d819964ee6cb69313cdb26f37_prof);

        
        $__internal_8d6ece859986e8de1dc9c5eac84d1a431747ab47fb94c7c609cadeb67eaa17dd->leave($__internal_8d6ece859986e8de1dc9c5eac84d1a431747ab47fb94c7c609cadeb67eaa17dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
