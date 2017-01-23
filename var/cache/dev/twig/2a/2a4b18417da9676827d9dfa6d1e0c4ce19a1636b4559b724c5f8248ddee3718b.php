<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_42d341700217897a5d6dbaa18068a5256ff9558508b8d2e18b2c3bb7e31f744d extends Twig_Template
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
        $__internal_90f628601abfaa393356d3fb34d0cdaddbadc4ce441e9a815c66a8e63a6b428a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f628601abfaa393356d3fb34d0cdaddbadc4ce441e9a815c66a8e63a6b428a->enter($__internal_90f628601abfaa393356d3fb34d0cdaddbadc4ce441e9a815c66a8e63a6b428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a66267a9c2a94877739eef11f4f791067f2c74551700f5174c78019290d941bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66267a9c2a94877739eef11f4f791067f2c74551700f5174c78019290d941bd->enter($__internal_a66267a9c2a94877739eef11f4f791067f2c74551700f5174c78019290d941bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_90f628601abfaa393356d3fb34d0cdaddbadc4ce441e9a815c66a8e63a6b428a->leave($__internal_90f628601abfaa393356d3fb34d0cdaddbadc4ce441e9a815c66a8e63a6b428a_prof);

        
        $__internal_a66267a9c2a94877739eef11f4f791067f2c74551700f5174c78019290d941bd->leave($__internal_a66267a9c2a94877739eef11f4f791067f2c74551700f5174c78019290d941bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
