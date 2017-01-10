<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_52a4000bf7e1e70129dfded40dcb81d74d5918b13a917da316f9e76ab8afbb3a extends Twig_Template
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
        $__internal_ebfba7b537f7a8814bf62faf13293e7b1b710e8ce3f99e5db4c168b54649b70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfba7b537f7a8814bf62faf13293e7b1b710e8ce3f99e5db4c168b54649b70c->enter($__internal_ebfba7b537f7a8814bf62faf13293e7b1b710e8ce3f99e5db4c168b54649b70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_de4e78401b20c6f3b2bf4fc1a7a6171f69a73b177dedb6c115e9677e1c11c560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e78401b20c6f3b2bf4fc1a7a6171f69a73b177dedb6c115e9677e1c11c560->enter($__internal_de4e78401b20c6f3b2bf4fc1a7a6171f69a73b177dedb6c115e9677e1c11c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ebfba7b537f7a8814bf62faf13293e7b1b710e8ce3f99e5db4c168b54649b70c->leave($__internal_ebfba7b537f7a8814bf62faf13293e7b1b710e8ce3f99e5db4c168b54649b70c_prof);

        
        $__internal_de4e78401b20c6f3b2bf4fc1a7a6171f69a73b177dedb6c115e9677e1c11c560->leave($__internal_de4e78401b20c6f3b2bf4fc1a7a6171f69a73b177dedb6c115e9677e1c11c560_prof);

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
