<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2eaf68e6044827c9b513bb899daf973bdb9b0e17a6fb5796abd4409bb5103cef extends Twig_Template
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
        $__internal_b0206cc675e7389404c72d705b05644c0cb01487255f76180fdd0adf84c1cf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0206cc675e7389404c72d705b05644c0cb01487255f76180fdd0adf84c1cf23->enter($__internal_b0206cc675e7389404c72d705b05644c0cb01487255f76180fdd0adf84c1cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b0206cc675e7389404c72d705b05644c0cb01487255f76180fdd0adf84c1cf23->leave($__internal_b0206cc675e7389404c72d705b05644c0cb01487255f76180fdd0adf84c1cf23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
", "@Framework/Form/hidden_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
