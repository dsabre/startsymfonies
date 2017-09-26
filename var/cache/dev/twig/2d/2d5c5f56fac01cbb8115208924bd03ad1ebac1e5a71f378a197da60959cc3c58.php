<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b38662d66d1ce4c34acea89e6af9ad6f67f97b7be7103dee6eabbe5dcb97a49 extends Twig_Template
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
        $__internal_e66f1c5e13ab74ed17d534a2178afdf2d9d0463c8dafc4bebd8869d02b4602d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66f1c5e13ab74ed17d534a2178afdf2d9d0463c8dafc4bebd8869d02b4602d4->enter($__internal_e66f1c5e13ab74ed17d534a2178afdf2d9d0463c8dafc4bebd8869d02b4602d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eba25f21cd7e6b035e0f7968c9b4e7d76f78ddfd1a11eb33e1d3b18c590873f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba25f21cd7e6b035e0f7968c9b4e7d76f78ddfd1a11eb33e1d3b18c590873f4->enter($__internal_eba25f21cd7e6b035e0f7968c9b4e7d76f78ddfd1a11eb33e1d3b18c590873f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e66f1c5e13ab74ed17d534a2178afdf2d9d0463c8dafc4bebd8869d02b4602d4->leave($__internal_e66f1c5e13ab74ed17d534a2178afdf2d9d0463c8dafc4bebd8869d02b4602d4_prof);

        
        $__internal_eba25f21cd7e6b035e0f7968c9b4e7d76f78ddfd1a11eb33e1d3b18c590873f4->leave($__internal_eba25f21cd7e6b035e0f7968c9b4e7d76f78ddfd1a11eb33e1d3b18c590873f4_prof);

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
", "@Framework/Form/form_errors.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
