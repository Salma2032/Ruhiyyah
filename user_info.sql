CREATE TABLE user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique ID for each record
    age INT NOT NULL,                   -- Age of the user
    sex INT NOT NULL,                   -- Sex of the user (0 for Female, 1 for Male)
    pregnant INT NOT NULL,              -- Pregnancy status (0 for No, 1 for Yes)
    job_title VARCHAR(255) NOT NULL,    -- Job title of the user
    student INT NOT NULL,               -- Student status (0 for No, 1 for Yes)
    difficulty_sleeping INT NOT NULL,   -- Difficulty sleeping (0 for No, 1 for Yes)
    anxious INT NOT NULL,               -- Anxiety level (0 for Rare, 1 for Sometimes, 2 for Often, 3 for Always)
    introvert INT NOT NULL,             -- Introvert status (0 for No, 1 for Yes)
    mood_swings INT NOT NULL,           -- Mood swings level (0 for Rare, 1 for Sometimes, 2 for Often, 3 for Always)
    appetite_loss INT NOT NULL,         -- Appetite loss level (0 for Rare, 1 for Sometimes, 2 for Often, 3 for Always)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  -- Timestamp for when the record was created
);