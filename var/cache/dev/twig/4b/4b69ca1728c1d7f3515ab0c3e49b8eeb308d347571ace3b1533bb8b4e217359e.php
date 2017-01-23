<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cf06f7325c8757459cc0046e463adc386f6fd9734e37f01d822f4fe55cf34649 extends Twig_Template
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
        $__internal_1f19cffcdc4d3e0dac3c9c96d8637f22ca8be51f8d32e2d1302d98e32831af10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f19cffcdc4d3e0dac3c9c96d8637f22ca8be51f8d32e2d1302d98e32831af10->enter($__internal_1f19cffcdc4d3e0dac3c9c96d8637f22ca8be51f8d32e2d1302d98e32831af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a024236cdcc93b8c732529ce0007b76fe2d081204ac30718bf84cbfd5ba1a8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a024236cdcc93b8c732529ce0007b76fe2d081204ac30718bf84cbfd5ba1a8d1->enter($__internal_a024236cdcc93b8c732529ce0007b76fe2d081204ac30718bf84cbfd5ba1a8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1f19cffcdc4d3e0dac3c9c96d8637f22ca8be51f8d32e2d1302d98e32831af10->leave($__internal_1f19cffcdc4d3e0dac3c9c96d8637f22ca8be51f8d32e2d1302d98e32831af10_prof);

        
        $__internal_a024236cdcc93b8c732529ce0007b76fe2d081204ac30718bf84cbfd5ba1a8d1->leave($__internal_a024236cdcc93b8c732529ce0007b76fe2d081204ac30718bf84cbfd5ba1a8d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
