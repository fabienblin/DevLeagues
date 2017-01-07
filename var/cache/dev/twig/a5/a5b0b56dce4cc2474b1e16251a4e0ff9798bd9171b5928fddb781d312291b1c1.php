<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2fd71bd4235b521622827c1cabd50bf2f495b82c76a1d874b1a7278f12a5aa77 extends Twig_Template
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
        $__internal_3d5f4964b22544d83d5afd36850d2b95169f9515b969e960473651d3d3354568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5f4964b22544d83d5afd36850d2b95169f9515b969e960473651d3d3354568->enter($__internal_3d5f4964b22544d83d5afd36850d2b95169f9515b969e960473651d3d3354568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_633412296fe15f6ba24453a79de223b26681429901be8f576e09dfc77836980e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633412296fe15f6ba24453a79de223b26681429901be8f576e09dfc77836980e->enter($__internal_633412296fe15f6ba24453a79de223b26681429901be8f576e09dfc77836980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3d5f4964b22544d83d5afd36850d2b95169f9515b969e960473651d3d3354568->leave($__internal_3d5f4964b22544d83d5afd36850d2b95169f9515b969e960473651d3d3354568_prof);

        
        $__internal_633412296fe15f6ba24453a79de223b26681429901be8f576e09dfc77836980e->leave($__internal_633412296fe15f6ba24453a79de223b26681429901be8f576e09dfc77836980e_prof);

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
", "@Framework/Form/form_errors.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
